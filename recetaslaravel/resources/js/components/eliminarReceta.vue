<template>
    <input
        type="submit"
        class="btn btn-danger text-white" value="Eliminar"
        @click="eliminarReceta"
     />

</template>

<script>
    export default{
        props:['recetaId'],
        mounted(){
            console.log('receta actual',this.recetaId)
        },
        methods: {
            eliminarReceta(){
               this.$swal({
                title: '¿Deseas eliminar esta receta?',
                text: "Una vez eliminada,no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!'
                }).then((result) => {
                if (result.isConfirmed) {

                    const params={
                        id:this.recetaId
                    }
                    // enviar la peticion al servidor
                    axios.post(`/recetas/${this.recetaId}`,{params,_method:'delete'})
                        .then(respuesta=>{
                            this.$swal(
                            'Receta Eliminada',
                            'Se eliminó la receta',
                            'success'
                            )
                            // Eliminar receta del DOM
                            // console.log(this.$el);
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                        })
                        .catch(error=>{
                            console.log(error);
                        })

                }
               })
            }
        }
    }
</script>