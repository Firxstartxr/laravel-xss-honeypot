# Laravel XSS Honeypot
**Honeypot** is a computer security mechanism set to detect, deflect, or, in some manner, counteract attempts at unauthorized use of information systems. Generally, a honeypot consists of data (for example, in a network site) that appears to be a legitimate part of the site which contains information or resources of value to attackers. It is actually isolated, monitored, and capable of blocking or analyzing the attackers.

# Challenges
**XSS** allows a user supplying untrusted input that, when loaded without proper validation or escaping, will execute a malicious action.
There are 5 easy **XSS** challenges for beginner pentesters as well as hints for them, so you don't get frustrated while solving.

# Logging
The application uses extended logging. All user actions are being logged, so we can monitor users' **payloads**. **Observers**, **events** and **listeners** are used for that.
