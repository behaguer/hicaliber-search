<template>
<el-form :inline="true" :model="formInline" class="search-form">
  <el-form-item label="">
    <el-input v-model="formInline.name" placeholder="Name"></el-input>
  </el-form-item>
  <el-form-item label="Bedrooms">
    <el-select v-model="formInline.bedrooms" placeholder="" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Bathrooms">
    <el-select v-model="formInline.bathrooms" placeholder="" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Stories">
    <el-select v-model="formInline.stories" placeholder="" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Garages">
    <el-select v-model="formInline.garages" placeholder="" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Price Range">
    <div class="block" style="min-width:200px;">
    <el-slider
      v-model="price"
      range
      :max="700000"
      >
    </el-slider>
  </div>
  </el-form-item>
  <el-form-item>
    <el-button type="primary" @click="onSubmit" v-loading.fullscreen.lock="fullscreenLoading" >Search</el-button>
  </el-form-item>
</el-form>
</template>
<script>
  export default {
    data() {
      return {
        fullscreenLoading: false,
        formInline: {
          user: '',
          region: '',
          price: [0,1000000]
        }
      }
    },
    methods: {
      onSubmit() {
        console.log('submit!');
        this.fullscreenLoading = true;
        setTimeout(() => {
          this.fullscreenLoading = false;
        }, 2000);
      }
    }
  }
</script>
<style>
  .el-loading-spinner {
    top: 50%;
    left: 50%;
}
</style>