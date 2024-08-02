<!-- src/views/NewPost.vue -->
<template>
  <main class="container">
    <h1>Create New Post</h1>
    <form @submit.prevent="submitForm">
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" v-model="form.title" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea class="form-control" v-model="form.description" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" @change="handleFileUpload" />
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </main>
</template>

<script>
export default {
  name: 'NewPost',
  data() {
    return {
      form: {
        title: '',
        description: '',
      },
      image: null,
    };
  },
  methods: {
    handleFileUpload(event) {
      this.image = event.target.files[0];
    },
    async submitForm() {
      const formData = new FormData();
      formData.append('title', this.form.title);
      formData.append('description', this.form.description);
      if (this.image) {
        formData.append('image', this.image);
      }

      try {
        // Send form data to the Laravel backend
        const response = await fetch('/posts', {
          method: 'POST',
          headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
          },
          body: formData,
        });

        if (!response.ok) {
          throw new Error('Network response was not ok.');
        }

        const result = await response.json();
        console.log(result);
        // Redirect or show success message
        this.$router.push('/'); // Redirect to home page or wherever needed
      } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
      }
    },
  },
};
</script>

<style scoped>
/* Add your styles here */
</style>
