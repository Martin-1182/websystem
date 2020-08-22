<template>
  <nav
    class="container mx-auto flex flex-wrap justify-between items-center py-8"
  >
    <div>
      <a href="/">
        <img src="../../img/logo.svg" class="w-48" alt="logo" />
      </a>
    </div>
    <div class="block lg:hidden">
      <button
        @click="toggle"
        class="flex items-center px-3 py-2 border rounded border-gray-500 hover:text-gray-600 hover:border-gray-600"
      >
        <svg
          class="current-color h-3 w-3"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" fill="gray" />
        </svg>
      </button>
    </div>
    <ul
      class="uppercase tracking-wide font-bold w-full block flex-grow lg:space-x-8 space-y-6 lg:space-y-0 lg:flex lg:flex-initial lg:w-auto items-center mt-8 lg:mt-0"
      :class="isOpen ? 'block' : 'hidden'"
    >
    <li>
        <a href="#projects" v-smooth-scroll="{ duration: 1000, offset: 10, updateHistory: false }">Projekty</a>
      </li>
      <li>
        <a href="#aboutUs" v-smooth-scroll="{ duration: 1000, offset: -50, updateHistory: false }">O nás</a>
      </li>
      <li>
        <a href="#contact" v-smooth-scroll="{ duration: 1000, offset: 50, updateHistory: false }">Kontakt</a>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    };
  },
  methods: {
    toggle() {
      this.isOpen = !this.isOpen;
    },
  },
};
</script>
<style lang="scss" scoped>
a {
  @apply text-green-700;
}

a:hover {
  @apply text-green-800;
}

nav .active {
  font-weight: bold;
  @apply border-black;
}

.container-inner {
  padding-left: 1rem;
  padding-right: 1rem;
}

@media (min-width: 640px) {
  .container-inner {
    max-width: 640px;
  }
}

@media (min-width: 768px) {
  .container-inner {
    max-width: 768px;
  }
}

@media (min-width: 1024px) {
  .container-inner {
    max-width: 800px;
  }
}
</style>
