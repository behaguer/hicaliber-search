<template>
  <el-table
    :data="tableData"
    stripe
    style="width: 100%">
    <el-table-column
      prop="name"
      label="Name"
      width="180">
    </el-table-column>
    <el-table-column
      prop="price"
      label="Price"
      width="180">
    </el-table-column>
    <el-table-column
      prop="bedrooms"
      label="Bedrooms">
    </el-table-column>
    <el-table-column
      prop="bathrooms"
      label="Bathrooms">
    </el-table-column>
    <el-table-column
      prop="stories"
      label="Stories">
    </el-table-column>
    <el-table-column
      prop="garages"
      label="Garages">
    </el-table-column>
  </el-table>
</template>

<script>
  export default {
    data() {
      return {
        tableData: null
      }
    },
  mounted () {
    const baseURI = 'http://127.0.0.1:8000/api/search'
    axios
      .post(baseURI)
      .then(response => (this.tableData = response.data))
    
    this.$root.$on('searchedHome', (data) => {  // Catch the data and push to table
      this.tableData = data;
    })

    }
  }
</script>