<template>
    <div>
        <div v-for="comment in comments" v-bind:key="comment.id">
            <div v-if="comment.parent_id == 0">
                <comment :comment="comment"></comment>
            </div>
        </div>
    </div>
</template>

<script>
import Comment from "./Comment.vue";
export default {
    components: {
        Comment
    },
    props: {
        authorized: {
            type: Boolean,
            default: false
        },
        postId: {
            type: Number,
            required: true,
            default: null
        }
    },

    data() {
        return {
            comments: null
        };
    },

    methods: {
        getComments() {
            axios.get(`/posts/${this.postId}/comments`).then(({ data }) => {
                this.comments = data.comments;
            });
        }
    },

    created() {
        this.getComments();
    },

    mounted() {
        Fire.$on("updated", () => {
            this.getComments();
        });
    }
};
</script>
