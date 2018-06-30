## 一键在Heroku上部署免费Youtube代理

#### 在线试用 
AWS S3受GFW干扰导致服务不稳定，请尝试使用不同节点

|      |      |      |
| :--- | :--- | :--- |  
| <a href="https://s3-ap-southeast-2.amazonaws.com/youtube-01/index.html" target="_blank" rel="noopener">悉尼节点</a>  | <a href="https://s3-us-west-1.amazonaws.com/youtube-02/index.html" target="_blank" rel="noopener">加州节点</a>  | <a href="https://s3-ap-northeast-1.amazonaws.com/youtube-03/index.html" target="_blank" rel="noopener">东京节点</a>  |
| <a href="https://s3.amazonaws.com/youtube-04/index.html" target="_blank" rel="noopener">弗吉尼亚节点</a>  | <a href="https://s3.eu-central-1.amazonaws.com/youtube-05/index.html" target="_blank" rel="noopener">法兰克福节点</a> | <a href="https://s3.eu-west-2.amazonaws.com/youtube-06/index.html" target="_blank" rel="noopener">伦敦节点</a> |
| <a href="https://s3-eu-west-1.amazonaws.com/youtube-07/index.html" target="_blank" rel="noopener">爱尔兰节点</a> | <a href="https://s3-ap-southeast-1.amazonaws.com/youtube-08/index.html" target="_blank" rel="noopener">新加坡节点</a> | <a href="https://s3.eu-west-3.amazonaws.com/youtube-09/index.html" target="_blank" rel="noopener">巴黎节点</a> |
| <a href="https://s3-sa-east-1.amazonaws.com/youtube-10/index.html" target="_blank" rel="noopener">圣保罗节点</a> | <a href="https://s3.us-east-2.amazonaws.com/youtube-12/index.html" target="_blank" rel="noopener">俄亥俄节点</a> | <a href="https://s3.ap-northeast-2.amazonaws.com/youtube-13/index.html" target="_blank" rel="noopener">首尔节点</a> |

#### 一键部署
请点击下方的"Deploy to Heroku"按钮

部署时需要指定Google API KEY, 申请步骤请参考 https://you2php.github.io/doc/ 。若您无法申请到KEY, 可以使用部署向导中的默认值, 但由于Google API 使用有配额限制，当使用量超过配额时，代理将无法正常工作

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

当观看某些视频遇到“The media could not be loaded”的错误提示时， 请尝试刷新浏览器或使用其它浏览器观看

###### --End--
