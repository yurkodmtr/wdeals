module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
          development: {
            options: {
              compress: true,
              yuicompress: true,
              optimization: 2
            },
            files: {
              "css/main.css": "less/design.less",
              "css/widget.css": "less/widget.less",
            }
          }
        },
        watch: {
            default: {
                files: [
                    'less/design.less',
                    'less/widget.less',
                ],
                tasks: ['build'],
                options: {
                    event: ['all']
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch'); 

    /*build dev + prod*/
    grunt.registerTask('build', [
        'less'
    ]);
};
