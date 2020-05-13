<template>
    <div>
        <Port
            v-for="port in ports"
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
            ports: []
        }
    }
}
</script>
