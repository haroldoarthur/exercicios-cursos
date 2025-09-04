import express from 'express'
import { createUser, getAllUsers, deleteUser } from './controllers/userController.js'


const router = express.Router()

router.post('/cadastro', createUser)
router.get('/lista-usuarios', getAllUsers)
router.delete('/deletar', deleteUser)


export default router