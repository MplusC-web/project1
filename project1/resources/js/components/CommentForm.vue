<template>
    <div>
        <textarea
            class="form-control"
            v-model="comment"
            placeholder="コメントする..."
        ></textarea>
        <button class="btn btn-primary mt-2" @click.prevent="storeComment">
            コメントする
        </button>
    </div>
</template>

<script>
export default {
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
            comment: ""
        };
    },

    methods: {
        storeComment() {
            if (!this.authorized) {
                alert("コメント機能はログイン中のみ使用できます");
                return;
            }
            axios
                .post(`/posts/${this.postId}/comments/create`, {
                    text: this.comment
                })
                .then(({ data }) => {
                    console.log(data);
                    Fire.$emit("updated");
                    this.comment = "";
                });
        }
    }
};
</script>
