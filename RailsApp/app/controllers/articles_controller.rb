class ArticlesController < ApplicationController
  def index
    @article = Article.includes(:comments).all
  end
end