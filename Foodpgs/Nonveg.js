document.querySelectorAll(".like-btn").forEach(btn => {
    btn.addEventListener("click", function (e) {

        const button = e.currentTarget; // ALWAYS the button
        const postId = button.dataset.postId;
        const likeCountSpan = button.querySelector(".like-count");

        fetch("like.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ post_id: postId })
        })
        .then(res => res.json())
        .then(data => {
            likeCountSpan.textContent = data.likes;
        })
        .catch(err => console.error(err));
    });
});
