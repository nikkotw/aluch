<template>
  <div>
      <h2 class="text-center">Listado Clientes</h2>
    <b-table
      id="listado-clientes"
      responsive
      class="mt-1"
      style="font-size: 14px"
      outlined
      small
      hover
      fixed      
      no-border-collapse
      head-variant="dark"
      :items="clientes.data"
      :fields="fieldsCliente"
    >
    

 
    <template v-slot:cell(emision_clu)="row">
       
                {{
                        new Date(
                        row.item.emision_clu
                        ).toLocaleDateString(
                        "en-GB",
                        { timeZone: "UTC" }
                        )
                        }}
     
       
        </template>

        <template v-slot:cell(vencimiento_clu)="row">
            <div class="text-danger" v-if="fecha>=cambioFecha(row.item.vencimiento_clu)">
                <strong>
                {{
                        new Date(
                        row.item.vencimiento_clu
                        ).toLocaleDateString(
                        "en-GB",
                        { timeZone: "UTC" }
                        )
                        }}
                    </strong>
            </div>
            <div v-else class="text-success">
                <strong>
                      {{
                        new Date(
                        row.item.vencimiento_clu
                        ).toLocaleDateString(
                        "en-GB",
                        { timeZone: "UTC" }
                        )
                        }}
                        </strong>
            </div>

        </template>
       
      <template v-slot:cell(pago)="row">
          
          <b-form-checkbox
                    v-model=row.item.pago
                    @change="actualizaPago(row.item.id,row.item.pago)"
                     switch
                     value=1
                     unchecked-value=0>
                </b-form-checkbox>

             
            
      </template>
   
    </b-table>
  </div>
</template>

<script>
export default {
  data() {
    return {
       fecha:"",
      clientes: [],
      fieldsCliente: [
        { key: "nombre", label: "Nombre" },
        { key: "email", label: "Email" },
        { key: "dni", label: "DNI" },
        { key: "domicilio", label: "Domicilio" },
        { key: "localidad", label: "Localidad" },
        { key: "emision_clu", label: "Emision CLU" },
        { key: "vencimiento_clu", label: "Vencimiento CLU" },
        { key: "pago", label: "Pago" },
      ],
      paginaActualUsuarios: 1,
    };
  },
  beforeMount() {
    this.fecha = new Date().toJSON().slice(0,10).replace(/-/g,'/');
    this.fecha = new Date(this.fecha).toLocaleDateString("en-GB", { timeZone: "UTC" });
    this.getAllUser();
  },
  mounted() {},
  methods: {
    getAllUser: async function () {
      const response = await axios.post("api/getClientes", {
        page: this.paginaActualListadoClientes,
      });
      this.clientes = response.data;
      console.log(this.clientes.data);
    },
    cambioFecha: function(fecha){
        return new Date(fecha).toLocaleDateString("en-GB", { timeZone: "UTC" });
    },
    actualizaPago: function (id,pago){
        axios.post('api/checkPago',{id:id,pago:pago}).then(res=>{
            if(res.data == 1){
                alert("pago Actualizado");
            }else{
                alert("Surgio un error al acutalizar Pago");
            }
                

        }).catch(err=>{
            console.log(err);
        })
    }
  },
};
</script>
