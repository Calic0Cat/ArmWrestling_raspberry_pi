from gpiozero import MCP3208 
pot = MCP3208(channel=0)
print(str(int(pot.value*1024))) 
