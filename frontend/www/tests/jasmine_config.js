(function() {
  var options = {
    color: true
  };

  jasmine.getEnv().addReporter(new jasmineReporters.TerminalReporter(options));
})();