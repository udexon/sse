from sseclient import SSEClient

messages = SSEClient('http://localhost/tst/demo_sse_a.php')
for msg in messages:
    # do_something_useful(msg)
    print(msg.data)
