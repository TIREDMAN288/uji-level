## GitHub Copilot Chat

- Extension Version: 0.24.2025021302 (prod)
- VS Code: vscode/1.97.2
- OS: Windows

## Network

User Settings:
```json
  "github.copilot.advanced.debug.useElectronFetcher": true,
  "github.copilot.advanced.debug.useNodeFetcher": false,
  "github.copilot.advanced.debug.useNodeFetchFetcher": true
```

Connecting to https://api.github.com:
- DNS ipv4 Lookup: 20.205.243.168 (119 ms)
- DNS ipv6 Lookup: Error (36 ms): getaddrinfo ENOTFOUND api.github.com
- Proxy URL: None (16 ms)
- Electron fetch (configured): HTTP 200 (396 ms)
- Node.js https: HTTP 200 (265 ms)
- Node.js fetch: HTTP 200 (167 ms)
- Helix fetch: HTTP 200 (297 ms)

Connecting to https://api.individual.githubcopilot.com/_ping:
- DNS ipv4 Lookup: 140.82.114.21 (2 ms)
- DNS ipv6 Lookup: Error (31 ms): getaddrinfo ENOTFOUND api.individual.githubcopilot.com
- Proxy URL: None (2 ms)
- Electron fetch (configured): HTTP 200 (280 ms)
- Node.js https: HTTP 200 (808 ms)
- Node.js fetch: HTTP 200 (841 ms)
- Helix fetch: HTTP 200 (821 ms)

## Documentation

In corporate networks: [Troubleshooting firewall settings for GitHub Copilot](https://docs.github.com/en/copilot/troubleshooting-github-copilot/troubleshooting-firewall-settings-for-github-copilot).