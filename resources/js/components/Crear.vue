<template>
        <section class="container-fluid py-4 todo " >
            <div class="container   py-4 todoporcentaje" >
                <div class="row p-5  border-1 shadow todoporcentaje justify-content-center">
                    <div class="col-xs-12  col-md-6  bg-danger   todoporcentaje text-center alinearSpaceAround">
                        <form @submit.prevent="save" ref="form">
                            <input type="hidden" name="mazo_id" v-model="form.mazo_id">
                            <h1  class="position-relative ">Ingrese una pregunta</h1>
                            <div class="input-group mb-3">

                            <span class="input-group-text">¿</span>
                            <input type="text" class="form-control" name="pregunta"  v-model="form.pregunta">
                            <span class="input-group-text">?</span>
                            </div>



                            <h1  class="position-relative ">Respuesta</h1>
                            <div class="input-group mb-3">
                                <textarea class="form-control" aria-label="With textarea"  name="respuesta" v-model="form.respuesta"></textarea>
                            </div>

                            <div class="d-grid  col-6 mx-auto">
                                <button type="submit" class="btn btn-light">Light</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</template>

<script>
export default {
    data(){
        return {
            form:{
                mazo_id:1,
                pregunta:'',
                respuesta:''
            }
        }
    },
    methods:{
        save(){
             var formData =  new FormData(this.$refs.form);
            axios.post('/crear_pregunta',formData)
                .then((resp) =>{
                    console.log(resp);

                })
                .catch((e)=>{
                    console.log(e);
                })
        }
    }

}
</script>


<style>

section{
    height: 100vh;
}

.todoporcentaje{
height:100%
}

.alinearSpaceAround{
  display: flex;
  flex-direction: column;
 justify-content: space-evenly;
}


</style>
