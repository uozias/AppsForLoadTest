class Comment < ActiveRecord::Base
  belongs_to :article
  has_many :comments, foreign_key: :parent_id
end