<template>
    <div>
        <div class="d-flex mt-3">
            <div v-if="comment.user.profile_photo">
                <img
                    :src="
                        '../storage/user_images/' + comment.user.profile_photo
                    "
                    class="post-profile-icon round-img2"
                />
            </div>
            <div v-else>
                <img
                    :src="images / blank_profile.png"
                    class="post-profile-icon
                round-img2"
                />
            </div>

            <div class="ml-3">
                <h6>
                    <strong>{{ comment.user.name }}</strong>
                    <small>{{ comment.created_at | moment }}</small>
                </h6>
                <div>{{ comment.content }}</div>
                <reply-form :comment="comment" />
            </div>
        </div>
        <replies :comment="comment" v-bind:key="comment.id" />
    </div>
</template>

<script>
import ReplyForm from "./ReplyForm.vue";
import Replies from "./Replies.vue";
import Comment from "./Comment.vue";
import moment from "moment";
export default {
    props: ["comment"],

    components: {
        ReplyForm,
        Replies,
        Comment
    },

    filters: {
        moment: function(date) {
            return moment(date).format("YYYY.MM.DD");
        }
    }
};
</script>
