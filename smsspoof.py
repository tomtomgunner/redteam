#!/usr/bin/env python
import clockwork        #https://www.clockworksms.com
api = "[key]"
src = "[source number]"
dst = "[destination number]"
msg = "[message]"
clockwork.API(api).send(clockwork.SMS(from_name=src,to=dst,message=msg))
