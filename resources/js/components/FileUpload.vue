<template>
  <div>
    <input type="text" v-model="title" placeholder="Image Title">
    <input type="file" @change="handleFileChange">
    <button @click="uploadImage">Upload Image</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      title: '',
      image: null,
    };
  },
  methods: {
    handleFileChange(event) {
      this.image = event.target.files[0];
         
    },
    uploadImage() {
      const formData = new FormData();
      formData.append('title', this.title);
      formData.append('image', this.image);

      axios.post('http://127.0.0.1:3000/upload', formData)
        .then(response => {
        console.log(formData,"upload");
          console.log(response.data.message);
        })
        .catch(error => {
          console.error(error.response.data);
        });
    },
  },
};
</script>
