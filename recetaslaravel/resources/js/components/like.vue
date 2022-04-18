<template>
    <div>
        <span class="like-btn" @click="likeReceta" :class="{'like-active':isActive}"></span>
        <p>{{cantidadLikes}} Les gustó esta receta</p>
    </div>
</template>
          
<script>
    export default{
        props:['recetaId','n','likes'],
        data:function(){
            return {
                isActive:this.n,
                totalLikes:this.likes==undefined? 0:this.likes
            }
        },
        mounted(){
            console.log(this.$data.isActive)
        },
        methods:{
            likeReceta(){
              
                const params={
                    id:this.recetaId
                }
                axios.post(`/likes/${this.recetaId}`,{params,_method:'put'})
                    .then(respuesta=>{
                        
                        //   this.$el.firstChild.classList.toggle('like-active');
                          
                        if(respuesta.data.attached.length > 0){
                            this.$data.totalLikes++;
                        }else{
                            this.$data.totalLikes--;
                        }
                        this.$data.isActive=!this.$data.isActive;
                    })
                    .catch(error=>{
                        if(error.response.status===401){
                            window.location='/register';
                        }
                    })
            }
        },
        computed:{
            cantidadLikes:function(){
                return  this.$data.totalLikes;
            }
        }
    }
</script>