<template>
  <div class="container">
    <add-component></add-component>
    <table class="table table-hover">
      <thead class="thead-light">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Image</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="product in products.data" :key="product.id">
          <td>{{ product.id }}</td>
          <td>{{ product.name }}</td>
          <td>{{ product.description }}</td>
          <td>{{ product.price }}</td>
          <td>{{ product.image }}</td>
          <td>{{ product.category_id }}</td>
        </tr>
      </tbody>
    </table>
    <pagination
      :data="products"
      @pagination-change-page="getProducts"
      class="mt-5"
    ></pagination>
  </div>
</template>

<script>
export default {
  data() {
    return {
      products: {},
    };
  },

  methods: {
    getProducts(page = 1) {
      axios.get("/products?page=" + page).then((response) => {
        console.log(response.data);
        this.products = response.data;
      });
    },
  },

  mounted() {
    console.log("Component mounted.");
    this.getProducts();
  },
};
</script>