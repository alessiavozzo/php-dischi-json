const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: "api.php",
            dischi: [],
            activeDisc: null,
            isModalOpen: false,
        }
    },
    methods: {
        showDetails(index) {
            this.activeDisc = this.dischi[index];
            this.isModalOpen = true;
        },
        closeModal() {
            this.isModalOpen = false;
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