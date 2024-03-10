import { ComponentFixture, TestBed } from '@angular/core/testing';

import { UseroptionsComponent } from './useroptions.component';

describe('UseroptionsComponent', () => {
  let component: UseroptionsComponent;
  let fixture: ComponentFixture<UseroptionsComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [UseroptionsComponent]
    });
    fixture = TestBed.createComponent(UseroptionsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
