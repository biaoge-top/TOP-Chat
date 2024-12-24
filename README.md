# TOP CHAT聊天室

通过VUE+PHP+axios+Json，实现聊天请求，聊天更新，发送，创建……等操作
（当前只能部分实现！）

# 文件目录介绍
## new
如果有人发送信息到当事人，就会将个人的id与新信息存放在new/（uid）.json的目录下。正常情况下当事人只要在线就以3秒的情况进行请求服务器的uid.json文件

```
[
    [
        "123456",
        "12-12",
        "123456789"
    ]
]
```



## chat
存放聊天的文件夹，如uid_uid.json（uid大的在前，小的在后面如88888_66666.json） ,群聊文件为q123456789.json（q开头的9位置数字的json），当new/uid.json请求到了新的消息，就会请求对应的聊天

```
[
    [
        "biaoge",
        "12:00",
        "HHH\u963f\u662f\u964d\u4f4e\u54e6\u963f\u65af\u8482\u82ac\u5bf9\u65b9\u6c34\u7535\u8d39\u8428\u54c8\u8212\u670d\u70b9\u4f1a\u554a\u8212\u670d\u70b9\u8985U\u76fe\u662f\u8fd8\u597d\u7684\u53d1\u6492iu\u82b1\u6d12\u5730\u65b9i\u54e6\u6c34\u7535\u8d39UI\u9ed1\u8272\u5927\u65b9\u5c31\u54c8\u4ee3\u53d1his\u6253\u7c89\u7b2c\u4e09\u65b9\u963f\u6253\u53d1\u674e\u5927\u53d1\u5c31\u662f\u54d2\u98de",
        "text"
    ],
    [
        "\u738b\u5f6a",
        "time",
        "msg",
        "chattype"
    ]
]
```

## Chatlist
存放聊天列表的文件。

```
{
	"static":"200",
	"username":"biaoge",
	"logonstatic":"12345678901234567890123456789012345",
	"chatlist":[
		["王彪"],
		["123456"],
		["123"],
		["888"],
		["999"],
		["100000"]
	]
}
```


# 测试图片
![输入图片说明](https://foruda.gitee.com/images/1735031091307792559/a1e5dce2_11239731.png "屏幕截图")
