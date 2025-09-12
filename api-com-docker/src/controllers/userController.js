import User from "../models/User.js"
import crypto from "node:crypto"


export const createUser = async (req, res) => {

    const usertoCreate = {
        id : crypto.randomUUID(),
        name : req.body.name,
        age : req.body.age,
        email : req.body.email
    }

    const user = await User.create(usertoCreate)

    res.status(200).json(user)

}

export const getAllUsers = async (req, res) => {

    const allUsers = await User.findAll()
    res.status(200).json(allUsers)

}

export const deleteUser = async (req, res) => {

    const user = await User.destroy({
        where : { id : req.params.id}
    })

    res.status(200).json(user)

}