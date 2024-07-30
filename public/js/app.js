document.addEventListener('DOMContentLoaded', () => {
    fetch('/api/articles')
        .then(response => response.json())
        .then(articles => {
            const articleList = document.getElementById('article-list');
            articleList.innerHTML = articles.map(article => `
                <div class="article">
                    <h2>${article.title}</h2>
                    <p>${article.content}</p>
                </div>
            `).join('');
        });
});
