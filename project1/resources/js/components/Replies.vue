<template>
    <div class="ml-4">
        <div v-if="comment.replies">
            <div v-for="comment in comment.replies" v-bind:key="comment.id">
                <div class="d-flex mt-3 ml-4">
                    <div>
                        <img
                            :src="
                                '../storage/user_images/' +
                                    comment.user.profile_photo
                            "
                            class="post-profile-icon round-img2"
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
        </div>
    </div>
</template>

<script>
import ReplyForm from "./ReplyForm.vue";
import moment from "moment";
export default {
    props: ["comment"],

    components: {
        ReplyForm
    },

    filters: {
        moment: function(date) {
            return moment(date).format("YYYY.MM.DD");
        }
    }
};
</script>
