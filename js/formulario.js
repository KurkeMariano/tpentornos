
eventListeners();

function eventListeners() {
    document.querySelector('#formulario').addEventListener('submit', validarRegistro);
}


function validarRegistro(e) {
    e.preventDefault();
    
    var usuario = document.querySelector('#usuariolg').value,
        password = document.querySelector('#passlg').value,
        tipo = document.querySelector('#tipo').value;
        
        if(usuario === '' || password === ''){
            // la validación falló
            swal({
              type: 'error',
              title: 'Error!',
              text: 'Ambos campos son obligatorios!'
            })
        } else {
            // Ambos campos son correctos, mandar ejecutar Ajax
            
            // datos que se envian al servidor
            var datos = new FormData();
            datos.append('usuario', usuario);
            datos.append('password', password);
            datos.append('accion', tipo);
            
            // crear el llamado a ajax
            var xhr = new XMLHttpRequest();
            
            // abrir la conexión.
            xhr.open('POST', 'modelos/modelo-admin.php', true);
            
            // retorno de datos
            xhr.onload = function(){
                if(this.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    
                    console.log(respuesta);
                    // Si la respuesta es correcta
                    if(respuesta.respuesta === 'correcto') {
                        // si es un nuevo usuario
                        if(respuesta.tipo === 'crear') {
                            swal({
                                title: 'Usuario Creado',
                                text: 'El usuario se creó correctamente',
                                type: 'success'
                            });
                        } else if(respuesta.tipo === 'login'){
                                
                                    window.location.href = 'Main_App/Alumno/index.php';
                                
                            }
                        }
                    } else {
                        // Hubo un error
                        swal({
                            title: 'Error',
                            text: 'Hubo un error',
                            type: 'error'
                        });
                    }
                };
        }
            
        // Enviar la petición
        xhr.send(datos);
            
}
