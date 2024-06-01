window.onload = () => {
    let formElement = document.querySelector("#formu");//obteniendo la informacion de ese elemento
    console.log(formElement);
    formElement.onsubmit = async (e) => {
        e.preventDefault();
        let fromFormData = new FormData(formElement);
        let  url='../../backend/controlador/controlador.php?funcion=crear';      
        
        let config = {
            method: 'POST', // Corregido el nombre del método
            body: fromFormData
        };

        let respuesta = await fetch(url, config);
        let datos = await respuesta.json();

        console.log(datos);

        if(datos==true){
            alert('libro insertado correctamaente')
        }else(
            alert('libro no incertado')
        )
    }
}