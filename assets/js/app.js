const { createApp } = Vue

createApp({
    data() {
        return {
            hello: "ok"
        }
    },
    created() {
        console.log("ok");
    }
}).mount('#app')