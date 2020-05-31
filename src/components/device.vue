<template>
    <div>
        <Port
            v-for="port in info.ports"
            :key="port.id" :port="port"
        />
    </div>
</template>

<script>
import Port from "./port.vue";

let portId = 0;

export default {
    componets: {
        Ports
    },
    data() {
        return {
            info: {
                state: String,
                ports: []
            },
        }
    }
}
</script>
