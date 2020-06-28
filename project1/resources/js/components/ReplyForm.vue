<template>
    <div>
        <a href="#" @click.prevent="showReplyForm">返信する</a>
        <div v-if="reply_form">
            <div class="form-group">
                <div class="d-flex align-items-start">
                    <textarea
                        class="form-control ml-2"
                        v-model="reply_text"
                        placeholder="返信する..."
                        cols="50"
                    ></textarea>
                </div>
            </div>
            <button class="btn btn-secondary" @click.prevent="hideReplyForm">
                キャンセル
            </button>
            <button class="btn btn-primary" @click.prevent="reply">
                返信する
            </button>
        </div>
    </div>
</template>

<script>
export default {
    props: ["comment"],

    data() {
        return {
            reply_form: false,
            reply_text: ""
        };
    },
    methods: {
        showReplyForm() {
            this.reply_form = true;
        },

        hideReplyForm() {
            this.reply_form = false;
            this.reply_text = "";
        },

        reply() {
            axios
                .post(`/posts/${this.comment.post_id}/comments/create`, {
                    text: this.reply_text,
                    parent_id: this.comment.id
                })
                .then(({ data }) => {
                    console.log("okay");
                    Fire.$emit("updated");
                    this.hideReplyForm();
                });
        }
    }
};
</script>
