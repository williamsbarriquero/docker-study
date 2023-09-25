FROM golang:1.21.1-alpine3.18 AS builder

WORKDIR /app
COPY go.* ./
RUN go mod download
COPY *.go ./
RUN go build -o /app

ENTRYPOINT ["/app"]

FROM scratch

WORKDIR /app

COPY --from=builder /app/app .

CMD ["/app/app"]