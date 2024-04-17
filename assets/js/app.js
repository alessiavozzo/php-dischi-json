const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: "api.php",
            dischi: []
        }
    },
    created() {
        axios
            .get(this.apiUrl)
            .then(response => {
                console.log(response);
                console.log(response.data);
                this.dischi = response.data;
            }
            )
    }
}).mount('#app')