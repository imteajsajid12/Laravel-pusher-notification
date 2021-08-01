<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Example Component</div>

          <div class="card-body">I'm an example component.</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    Echo.join(`chatify`)
      .here((users) => {
        console.log(users.name);
      })
      .joining((user) => {
        console.log(user.name);
      })
      .leaving((user) => {
        console.log(user.name);
      })
      .error((error) => {
        console.error(error);
      });
  },
  created() {
    Echo.channel("chatify").listen("Notify", (e) => {
      console.log(e);
      alert(e.message);
    });
  },
};
</script>
