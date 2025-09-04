import express from 'express'
import User from './models/User.js'
import Sequelize from 'sequelize'
import config from './config/database.js'
import userRoutes from './routes.js'

const app = express()
app.use(express.json())


const sequelize = new Sequelize(config)
User.init(sequelize)

app.use('/usuarios', userRoutes)

sequelize.authenticate()
    .then(() => {

        console.log('Conectado ao DB')
        app.listen(3000, () => { console.log("Servidor rodando porta 3000") })
        

    })
    .catch((error) => {
        console.log('Erro ao conectar', error)
    })



