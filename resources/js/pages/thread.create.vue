<template>
  <div>
    <spinner v-if="loading"></spinner>
    <div v-else-if="app.currentForum">
      <div class="container">
        <div class="jumbotron">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrum-item">
                <router-link :to="{ name: 'categories' }">Home</router-link>
              </li>
              <li class="breadcrumb-item">
                <router-link
                  :to="{ name: 'forum', params: { id: app.currentForum.id } }"
                >
                  {{ app.currentForum.title }}
                </router-link>
              </li>
              <li class="breadcrumb-item">Create Thread</li>
            </ol>
          </nav>

          <h1 class="display-4">{{ app.currentForum.title }}</h1>
          <h5>Create Thread</h5>
        </div>
      </div>

      <div class="container">
        <div class="alert alert-danger" v-if="errors.length">
          <strong>Correct following errors</strong>
          <ul class="my-0">
            <li v-for="(error, index) in errors" :key="index">
              {{ error }}
            </li>
          </ul>
        </div>

        <form v-on:submit.prevent="onSubmit">
          <div class="form-group">
            <input
              type="text"
              v-model="title"
              class="form-control"
              v-bind:class="{ 'is-invalid': errorTitle }"
              placeholder="Title"
              style="height: 70px; font-size: 40px; padding: 15px"
            />
          </div>

          <!-- Quill Editor -->
          <quill-editor
            v-model="body"
            ref="myQuillEditor"
            style="height: 500px; margin-bottom: 60px"
            :options="editorOptions"
          ></quill-editor>

          <button
            class="btn btn-lg btn-success float-right"
            style="margin-bottom: 50px"
          >
            Create Thread
          </button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
//require styles
import "quill/dist/quill.core.css";
import "quill/dist/quill.snow.css";
import "quill/dist/quill.bubble.css";

import { quillEditor } from "vue-quill-editor";

export default {
    name: 'thread-create',
    props: ['app'],
    components: {
        quillEditor
    },
    data() {
        return {
            title: '',
            body: '',
            errorTitle: null,
            errors: [],
            
        }
    }
};
</script>

<style>
</style>
