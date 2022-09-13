<template>
<el-form :inline="true" :model="formInline" class="demo-form-inline">
  <el-form-item label="">
    <el-input v-model="formInline.name" placeholder="Name"></el-input>
  </el-form-item>
  <el-form-item label="Bedrooms">
    <el-select v-model="formInline.bedrooms" placeholder="Bedrooms" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Bathrooms">
    <el-select v-model="formInline.bathrooms" placeholder="Bathrooms" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Stories">
    <el-select v-model="formInline.stories" placeholder="Stories" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
  </el-form-item>
  <el-form-item label="Garages">
    <el-select v-model="formInline.garages" placeholder="Garages" style="width:70px">
      <el-option label="Choose One" value=""></el-option>
      <el-option label="1" value="1"></el-option>
      <el-option label="2" value="2"></el-option>
      <el-option label="3" value="3"></el-option>
      <el-option label="4" value="4"></el-option>
      <el-option label="5" value="5"></el-option>
    </el-select>
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
          region: ''
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