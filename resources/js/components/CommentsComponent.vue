<template>
    <div class="comment">
        <div class="comment-content">

            <!-- {{ this.comments }} -->

            <comment-component v-for="comment in comments" :comment="comment" :key="comment.id"></comment-component>


        </div>
    </div>
</template>

<script>
    export default {
        mounted() {

            this.initialComments();

        },
        data(){
            return{
                comments: [],

            }
        },
        methods:{
            initialComments(){

                axios.get("/api/tweet-comments/" + this.tweetId)
                    .then((response) => {

                        this.comments = response.data.data;
                })
            }

        },
        props: ['tweetId']
    }
</script>
