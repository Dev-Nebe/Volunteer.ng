define(["ojs/ojcore", "knockout", "jquery"], function(e, n, o) {
  function a() {
    var e = this;
    (e.fullname = n.observable()),
      (e.userid = n.observable()),
      (e.email = n.observable()),
      (e.phone = n.observable()),
      (e.stack = n.observableArray()),
      (e.location = n.observable()),
      (e.handleActivated = function(e) {}),
      (e.handleAttached = function(e) {}),
      (e.handleBindingsApplied = function(e) {}),
      (e.handleDetached = function(e) {});
  }
  return new a();
});
