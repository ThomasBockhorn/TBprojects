<template>
  <div>
    <div class="bg-green-100 pt-5">
      <div id="skills">
        <h4 class="text-center text-4xl">Skills</h4>
        <div class="grid grid-cols-5 gap-4 mt-10 pb-20 px-10">
          <!-- PHP rating -->
          <h6 class="text-center">PHP</h6>
          <div class="flex justify-start">
            <StarRating :rating="PHP" :star-size="20" :show-rating="false" />
          </div>

          <div></div>

          <!-- Laravel rating -->
          <h6 class="text-center">Laravel</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Laravel"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- Java rating -->
          <h6 class="text-center">Java</h6>
          <div class="flex justify-start">
            <StarRating :rating="Java" :star-size="20" :show-rating="false" />
          </div>

          <div></div>

          <!-- Bootstrap rating -->
          <h6 class="text-center">Bootstrap</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Bootstrap"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- Javascript rating -->
          <h6 class="text-center">Javascript</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Javascript"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <div></div>

          <!-- Tailwind rating -->
          <h6 class="text-center">Tailwind</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Tailwind"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- Vue rating -->
          <h6 class="text-center">Vue</h6>
          <div class="flex justify-start">
            <StarRating :rating="Vue" :star-size="20" :show-rating="false" />
          </div>

          <div></div>

          <!-- Java Spring rating -->
          <h6 class="text-center">Spring</h6>
          <div class="flex justify-start">
            <StarRating :rating="Spring" :star-size="20" :show-rating="false" />
          </div>

          <!-- HTML rating -->
          <h6 class="text-center">HTML</h6>
          <div class="flex justify-start">
            <StarRating :rating="HTML" :star-size="20" :show-rating="false" />
          </div>

          <div></div>

          <!-- CSS -->
          <h6 class="text-center">CSS</h6>
          <div class="flex justify-start">
            <StarRating :rating="CSS" :star-size="20" :show-rating="false" />
          </div>

          <!-- Algorithims rating -->
          <h6 class="text-center">Algorithims</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Algorithims"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <div></div>

          <!-- Data Structures rating -->
          <h6 class="text-center">Data Structures</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="DataStructures"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- MySQL rating -->
          <h6 class="text-center">MySQL</h6>
          <div class="flex justify-start">
            <StarRating :rating="MySQL" :star-size="20" :show-rating="false" />
          </div>

          <div></div>

          <!-- Object Oriented Programming rating -->
          <h6 class="text-center">Object Oriented Programming</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="ObjectOrientedProgramming"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- Teaching rating -->
          <h6 class="text-center">Teaching</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Teaching"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <div></div>

          <!-- Customer Service rating -->
          <h6 class="text-center">Customer Service</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="CustomerService"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <!-- Researching rating -->
          <h6 class="text-center">Researching</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Researching"
              :star-size="20"
              :show-rating="false"
            />
          </div>

          <div></div>

          <!-- Communication rating -->
          <h6 class="text-center">Communication</h6>
          <div class="flex justify-start">
            <StarRating
              :rating="Communication"
              :star-size="20"
              :show-rating="false"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
   
<script>
import StarRating from "vue-star-rating";

export default {
  components: {
    StarRating,
  },
  data() {
    return {
      PHP: 3,
      Java: 2,
      Javascript: 3,
      Vue: 3,
      HTML: 3,
      Algorithims: 2,
      MySQL: 3,
      Teaching: 4,
      Researching: 4,
      Laravel: 3,
      Bootstrap: 3,
      Tailwind: 3,
      Spring: 2,
      CSS: 3,
      DataStructures: 2,
      ObjectOrientedProgramming: 3,
      CustomerService: 4,
      Communication: 4,
    };
  },
};
</script>

<style scoped>
</style>