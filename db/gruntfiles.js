//GERENCIADOR DE TAREFAS -> EXERCUTAR SERVIDOR - MAPEAR OS ARQUIVOS E REINICIA-LO 
// A CADA NOVA ALTERACAO

module.exports = (grunt) => {
    grunt.initConfig({
        execute: {
            target: {
                src: ['connect.js']
            }
        },
        watch: {
            scripts: {
                files: ['connect.js'],
                tasks: ['execute'],
            },
        }
    })

    grunt.loadNpmTasks('grunt-contrib-watch')
    grunt.loadNpmTasks('grunt-execute')
}