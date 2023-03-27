<template>
    <form id="app">
        <label class="label" for="task">Nueva tarea: </label>
        <input type="text" v-model="newTask" id="task">
        {{ newTask }}
        <input type="submit" value="Crear tarea">
    </form>
</template>
  
<script>
export default {
    data: () => ({
        newTask: ""
    })
};
</script>
  
<style></style>