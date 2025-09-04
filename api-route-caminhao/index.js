require('dotenv').config();
const express = require('express');
const axios = require('axios');

const app = express();
const PORT = process.env.PORT || 3000;
const API_KEY = process.env.HERE_API_KEY;

app.use(express.json());

app.post('/rota', async (req, res) => {
  const { origin, destination } = req.body;

  // Validação básica
  if (
    !origin?.latitude || !origin?.longitude ||
    !destination?.latitude || !destination?.longitude
  ) {
    return res.status(400).json({
      error: 'Parâmetros inválidos. Envie origin e destination com latitude e longitude.'
    });
  }

  // Montando strings no formato "lat,lng"
  const originStr = `${origin.latitude},${origin.longitude}`;
  const destinationStr = `${destination.latitude},${destination.longitude}`;

  console.log('🔍 Origin:', originStr);
  console.log('🔍 Destination:', destinationStr);

  const baseUrl = 'https://router.hereapi.com/v8/routes';

  const params = {
    transportMode: 'truck',
    origin: originStr,
    destination: destinationStr,
    return: 'summary',
    apikey: API_KEY
  };

  try {
    const response = await axios.get(baseUrl, { params });

    const resumo = response.data.routes?.[0]?.sections?.[0]?.summary;

    if (!resumo) {
      return res.status(404).json({ error: 'Rota não encontrada.' });
    }

    const { duration, length } = resumo;
    const horas = Math.floor(duration / 3600);
    const minutos = Math.floor((duration % 3600) / 60);
    const distanciaKm = (length / 1000).toFixed(2);

    return res.json({
      tempoEstimado: `${horas}h ${minutos}min`,
      distanciaKm,
      durationSegundos: duration,
      distanceMetros: length
    });

  } catch (error) {
    console.error('❌ Erro na requisição:', error.response?.data || error.message);
    return res.status(500).json({ error: 'Erro ao calcular rota.' });
  }
});

app.listen(PORT, () => {
  console.log(`🚚 Servidor rodando em http://localhost:${PORT}`);
});
 