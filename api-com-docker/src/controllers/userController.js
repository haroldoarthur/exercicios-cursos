export const createUser = (req, res) => {


    res.status(200).json({message: "Criar usuario"})

}

export const getAllUsers = (req, res) => {


    res.status(200).json({message: "Ver todos usuario"})

}

export const deleteUser = (req, res) => {


    res.status(200).json({message: "Deletar usuario"})

}