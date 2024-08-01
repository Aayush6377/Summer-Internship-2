// src/components/News.jsx
import React, { useEffect, useState } from 'react';
import { fetchTopHeadlines } from './newsService';
import './News.css'; // Import the CSS file

const News = () => {
  const [articles, setArticles] = useState([]);

  useEffect(() => {
    const fetchNews = async () => {
      const newsArticles = await fetchTopHeadlines();
      setArticles(newsArticles);
    };
    fetchNews();
  }, []);

  return (
    <div>

      <div className="news-list">
        {articles.map((article, index) => (
          <div key={index} className="news-item">
            <h3>{article.title}</h3>
            <img src={article.urlToImage} alt={article.title} />
            <p>{article.description}</p>
            <a href={article.url} target="_blank" rel="noopener noreferrer">
              Read more
            </a>
          </div>
        ))}
      </div>
    </div>
  );
};

export default News;
