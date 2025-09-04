export default {
    dialect: 'postgres',
    host : 'localhost',
    username: 'postgres',
    password : 'postgres#123',
    database : 'usersdb',
    define: {
        timestamp : true,
        underscored: true,
        underscoredAll: true,
    }
}