document.addEventListener('DOMContentLoaded', function() {
    
    let currentCharacter = null;
    
    window.loadComments = function(characterName) {
        currentCharacter = characterName;
        const commentsList = document.getElementById('commentsList');
        
        commentsList.innerHTML = '<div class="comments-empty">Loading comments...</div>';
        
        fetch(`/includes/comments.inc.php?character_name=${encodeURIComponent(characterName)}`)
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    displayComments(data.comments);
                } else {
                    commentsList.innerHTML = '<div class="comments-empty">Failed to load comments</div>';
                }
            })
            .catch(error => {
                console.error('Error loading comments:', error);
                commentsList.innerHTML = '<div class="comments-empty">Failed to load comments</div>';
            });
    }
    
    function displayComments(comments) {
        const commentsList = document.getElementById('commentsList');
        
        if (comments.length === 0) {
            commentsList.innerHTML = '<div class="comments-empty">No comments yet. Be the first to comment!</div>';
            return;
        }
        
        commentsList.innerHTML = '';
        
        comments.forEach(comment => {
            const commentItem = document.createElement('div');
            commentItem.className = 'comment-item';
            
            const commentHeader = document.createElement('div');
            commentHeader.className = 'comment-header';
            
            const commentAuthor = document.createElement('span');
            commentAuthor.className = 'comment-author';
            commentAuthor.textContent = comment.username; // Safe: uses textContent
            
            const commentDate = document.createElement('span');
            commentDate.className = 'comment-date';
            commentDate.textContent = comment.created_at; // Safe: uses textContent
            
            commentHeader.appendChild(commentAuthor);
            commentHeader.appendChild(commentDate);
            
            const commentText = document.createElement('p');
            commentText.className = 'comment-text';
            commentText.innerHTML = comment.comment_text;
            
            commentItem.appendChild(commentHeader);
            commentItem.appendChild(commentText);
            
            commentsList.appendChild(commentItem);
        });
    }
    
    const commentForm = document.getElementById('commentForm');
    if (commentForm) {
        commentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const textarea = document.getElementById('commentTextarea');
            const submitBtn = document.getElementById('commentSubmitBtn');
            const commentText = textarea.value.trim();
            
            if (!commentText) {
                alert('Please write a comment');
                return;
            }
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Posting...';
            
            const formData = new FormData();
            formData.append('character_name', currentCharacter);
            formData.append('comment_text', commentText);
            
            fetch('/includes/comments.inc.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    textarea.value = '';
                    window.loadComments(currentCharacter);
                } else {
                    alert(data.message || 'Failed to post comment');
                }
            })
            .catch(error => {
                console.error('Error posting comment:', error);
                alert('Failed to post comment. Please try again.');
            })
            .finally(() => {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Post Comment';
            });
        });
    }
    
    // Listen for modal opened events
    document.addEventListener("characterModalOpened", (e) => {
        window.loadComments(e.detail.characterName);
    });
});