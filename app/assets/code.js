const app = new (function(){
    this.tbody = document.getElementById("tbody");
    this.id = document.getElementById("id");
    this.nombre = document.getElementById("nombre");
    this.email = document.getElementById("email");
    this.edad = document.getElementById("edad");

    // listado de todos los registro de la tabla conectamos con listado.php
    this.listado= () =>{
        fetch("../controllers/listado.php")
        .then((res)=>res.json())
        .then(data=>{
            this.tbody.innerHTML = "";
            data.forEach(item => {
                this.tbody.innerHTML +=`
                    <tr>
                        <td>${item.id}</td>
                        <td>${item.nombre}</td>
                        <td>${item.email}</td>
                        <td>${item.edad}</td>
                        <td>
                        <a href="#" class="btn btn-warning btn-sm" onclick="app.editar(${item.id})">EDITAR </a>
                        <a href="#" class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">ELIMINAR </a>
                        </td>
                    </tr>
                `;
            });
            
        })
        .catch((error) => console.log(error)); 
    };

    //guardamos los datos de la persona y los enviamos, conectamos con actualizar.php
    this.guardar = () =>{
        var form = new FormData();
        form.append("nombre", this.nombre.value);
        form.append("email", this.email.value);
        form.append("edad", this.edad.value);
        form.append("id", this.id.value);
        //sí el valor de id es vacío es un nuevo registro, conecta con guardar.php
        if(this.id.value == ""){
            fetch("../controllers/guardar.php", {
                method: "POST",
                body: form,
            })
            .then((res)=>res.json())
            .then((data) => {
                alert("Agregado con éxito");
                this.listado();
                this.limpiar();
            })
            .catch((error) => console.log(error));
        //sí recibimos el valor de id es un registro existente que tenemos que actualizar, conectamos con actualizar.php
        }else{
            fetch("../controllers/actualizar.php", {
                method: "POST",
                body: form,
            })
            .then((res)=>res.json())
            .then((data) => {
                alert("Actualizado con éxito");
                this.listado();
                this.limpiar();
            })
            .catch((error) => console.log(error));
        }
    };
    
    //Limpia todos los campos del formulario
    this.limpiar = () =>{
        this.id.value = "";
        this.nombre.value = "";
        this.email.value = "";
        this.edad.value = "";
    };

    //Recibe el id de la persona, para eliminar su registro, conecta con eliminar.php
    this.eliminar = (id) =>{
        var form = new FormData();
        form.append("id", id);
        fetch("../controllers/eliminar.php", {
            method: "POST",
            body: form,
        })
        .then((res) => res.json())
        .then((data) => {
            alert("Eliminado con éxito");
            this.listado();
        })
        .catch((error)=> console.log(error));
    };


    //Obtiene los datos de la persona, recibe el id y conecta con editar.php
    this.editar = (id) => {
        var form = new FormData();
        form.append("id", id);
        fetch("../controllers/editar.php", {
            method: "POST",
            body: form,
        })
        .then((res) => res.json())
        .then((data) => {
            this.id.value = data.id;
            this.nombre.value = data.nombre;
            this.email.value = data.email;
            this.edad.value = data.edad;
        })
        .catch((error)=> console.log(error));
    };

})();
app.listado();