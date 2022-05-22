<template>
  <div>
    <Head title="Contact" />
    <div class="bg-amber-50">
      <GuestLayout>
        <div id="main">
          <h3 class="text-center text-7xl pt-10">Contact</h3>
          <div class="h-screen flex flex-col justify-center items-center">
            <form
              ref="form"
              class="block p-6 rounded-lg shadow-lg bg-white w-2/4"
              @submit.prevent="sendEmail"
            >
              <div class="form-group mb-6">
                <input
                  type="text"
                  class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700
                    focus:bg-white
                    focus:border-blue-600
                    focus:outline-none
                  "
                  id="exampleInput7"
                  placeholder="Name"
                  name="name"
                  v-model="name"
                />
              </div>
              <div class="form-group mb-6">
                <input
                  type="email"
                  class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700
                    focus:bg-white
                    focus:border-blue-600
                    focus:outline-none
                  "
                  id="exampleInput8"
                  placeholder="Email address"
                  name="email"
                  v-model="email"
                />
              </div>
              <div class="form-group mb-6">
                <textarea
                  class="
                    form-control
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700
                    focus:bg-white
                    focus:border-blue-600
                    focus:outline-none
                  "
                  id="exampleFormControlTextarea13"
                  rows="3"
                  placeholder="Message"
                  name="message"
                  v-model="message"
                ></textarea>
              </div>

              <input
                type="submit"
                class="
                  w-full
                  px-6
                  py-2.5
                  bg-blue-600
                  text-white
                  font-medium
                  text-xs
                  leading-tight
                  uppercase
                  rounded
                  shadow-md
                  hover:bg-blue-700 hover:shadow-lg
                  focus:bg-blue-700
                  focus:shadow-lg
                  focus:outline-none
                  focus:ring-0
                  active:bg-blue-800 active:shadow-lg
                  transition
                  duration-150
                  ease-in-out
                "
                value="Send"
              />
            </form>
          </div>
        </div>
      </GuestLayout>
    </div>
  </div>
</template>

<script>
import GuestLayout from "@/Layouts/Guest";
import { Head } from "@inertiajs/inertia-vue3";
import emailjs from "@emailjs/browser";

export default {
  data(){
      return{
        name: "",
        email: "",
        message: ""
      }
    },
  components: {
    GuestLayout,
    Head,
  },
  methods: {
    sendEmail(e) {
      try {
        emailjs
          .sendForm(
            "tecktonetMailService",
            "template_sx0lr8w",
            this.$refs.form,
            "user_6QEusrvbUjGdKTzVBP8Xv"
          )
          .then((result) => {
            console.log("Success!", result.text);
          })
          .catch((error) => {
            console.log("Failed...", error.text);
          });
      } catch (error) {
        console.log({ error });
      }
      this.name = "";
      this.email = "";
      this.message = "";
    },
  },
};
</script>

<style scoped>
</style>