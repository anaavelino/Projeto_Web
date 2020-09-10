
const mysql = require('mysql');

const con = mysql.createConnection({
    host: "127.0.0.1",
    user: "root",
    password: "root",
    database: "db_agenda"
});

con.connect((err) => {
    if (err) {
        console.log('Erro connecting to database...', err)
        return
    }
    console.log('Connection established!')
})

con.end((err) => {
    if(err) {
        console.log('Erro to finish connection...', err)
        return 
    }
    console.log('The connection was finish...')
})